<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderBillings;
use App\Models\OrderShippings;
use App\Models\OrderItems;
use App\Models\Store;
use DataTables;
use DB;
use Mail;
use App\Mail\DynamicEmail;

class OrdersController extends Controller
{
    private static $module = "orders";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }
        
        return view('administrator.orders.index');

    }

    public function getData(Request $request)
    {
        // $data = Orders::select(
        //     DB::raw(
        //         'orders.*, customers.name as cust_name,
        //         order_shippings.cost as cost,
        //         order_shippings.courier as courier,
        //         order_shippings.resi as resi,
        //         order_billings.payment_method as payment_method,
        //         order_billings.status as billing_status,
        //         order_billings.data as billing_data'))
        //     ->leftJoin(DB::raw('customers'), 'customers.id', '=', 'orders.customer_id')
        //     ->leftJoin(DB::raw('order_shippings'), 'order_shippings.order_id', '=', 'orders.id')
        //     ->leftJoin(DB::raw('order_billings'), 'order_billings.order_id', '=', 'orders.id')
        //     ->orderBy('orders.created_at', 'DESC');

        $query = DB::table('orders')
            ->leftjoin('customers', 'customers.id', '=', 'orders.customer_id')
            ->leftjoin('order_shippings', 'order_shippings.order_id', '=', 'orders.id')
            ->leftjoin('order_billings', 'order_billings.order_id', '=', 'orders.id')
            ->select(
                'orders.id',
                'orders.id as order_id',
                'orders.customer_id',
                'orders.invoice_number',
                'orders.status',
                'orders.name',
                'orders.email',
                'orders.total',
                'orders.note',
                'orders.phone',
                'orders.transaction_date',
                'customers.name as cust_name',
                'order_shippings.cost as cost',
                'order_shippings.courier as courier',
                'order_shippings.resi as resi',
                'order_shippings.weight',
                'order_shippings.service',
                'order_shippings.dimensions',
                'order_shippings.address',
                'order_billings.payment_method as payment_method',
                'order_billings.status as billing_status',
                'order_billings.data as billing_data',
                'order_billings.data AS bank'
            );

        if($request->status != ""){
            $data = $query->where("orders.status",$request->status)->orderBy('orders.created_at', 'DESC');
        }else{
            $data = $query->orderBy('orders.created_at', 'DESC');
        }

        // return $data->get();
        return DataTables::of($data)
            ->addColumn('confirm', function ($row) {
                $billing = (array) json_decode($row->billing_data);

                if (array_key_exists("file_attachment", $billing) && $row->billing_status != "paid") {
                    $btn = "<a href='#' data-ix='" . $row->id . "' data-attachment='" . img_src($billing["file_attachment"], "payment_confirmation") . "' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 paymentConfirm'><span class='svg-icon svg-icon-muted svg-icon-2hx'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'>
                <path opacity='0.3' d='M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z' fill='black'/>
                <path d='M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z' fill='black'/>
                <path d='M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z' fill='black'/></svg></span></a>";
                } else {
                    $btn = "";
                }

                return $btn;
            })
            ->addColumn('cust_name', function ($row) {
                if ($row->customer_id != null) {
                    $customer = $row->cust_name;
                } else {
                    $customer = $row->name;
                }

                return $customer;
            })
            ->addColumn('payment_method', function ($row) {
                $label = "";
                if ($row->payment_method != null) {

                    $billing = (array) json_decode($row->billing_data);
                    if ($row->payment_method == 'manual_bank_transfer') {
                        $label .= 'Manual Bank Transfer<br>';
                        $label .= strtoupper($billing['bank_name'] . ' - ' . $billing['account_number'] . ' an ' . $billing['account_owner']);
                    } else {
                        if (array_key_exists('payment_type', $billing)) {
                            $label .= '' . ucwords(str_replace('_', ' ', $billing['payment_type'])) . ' (Virtual Acccount)<br>';
                            if ($billing['payment_type'] == 'bank_transfer') {
                                foreach ($billing['va_numbers'] as $row) {
                                    $label .= strtoupper($row->bank . ' - ' . $row->va_number);
                                }
                            } elseif ($billing['payment_type'] == 'cstore') {
                                $label .= strtoupper($billing['store'] . ' - ' . $billing['payment_code']);
                            }
                        } else {
                            $label .= 'Other';
                        }
                    }
                } else {
                    $label .= "-";
                }

                return $label;
            })
            ->rawColumns(['confirm', 'cust_name', 'payment_method'])->make(true);
    }

    public function getStoreData(Request $request)
    {
        $data = Store::select('stores.*', 'provinces.title as province_name', 'cities.title as city_name')
                        ->leftJoin(DB::raw('provinces'), 'provinces.id', '=', 'stores.province_id')
                        ->leftJoin(DB::raw('cities'), 'cities.id', '=', 'stores.city_id')
                        ->where('stores.name', '=', $request->name)->first();

        return ($data);
    }

    public function getProductData(Request $request)
    {
        $data = OrderItems::select(DB::raw('order_items.*, products.name as product_name, product_variants.name as variant_name'))
                ->leftJoin(DB::raw('products'), 'products.id', '=', 'order_items.product_id')
                ->leftJoin(DB::raw('product_variants'), 'product_variants.id', '=', 'order_items.product_variant_id')
                ->where('order_items.order_id', '=', $request->id)
                ->get();

        return ($data);
    }

    public function detail($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }

        $orders = Orders::select(DB::raw('orders.*, customers.name as cust_name'))
            ->leftJoin(DB::raw('customers'), 'customers.id', '=', 'orders.customer_id')
            ->where('orders.id', '=', $id)
            ->first();

        $order_billing = OrderBillings::select(DB::raw('*'))
            ->where('order_id', '=', $id)
            ->first();

        $order_shipping = OrderShippings::select(DB::raw('*'))
            ->where('order_id', '=', $id)
            ->first();

        $order_items = OrderItems::select(DB::raw('order_items.*, products.name as product_name, product_variants.price as product_price, product_variants.name as variant_name, product_variants.sku as sku, product_variants.discount_price as product_discount_price'))
            ->leftJoin(DB::raw('products'), 'products.id', '=', 'order_items.product_id')
            ->leftJoin(DB::raw('product_variants'), 'product_variants.id', '=', 'order_items.product_variant_id')
            ->where('order_items.order_id', '=', $id)
            ->get();

        $shipping = json_decode($order_shipping->address);
        $store_name = $shipping[0]->store_name;

        $store_data = Store::select('stores.*', 'provinces.title as province_name', 'cities.title as city_name')
                            ->leftJoin(DB::raw('provinces'), 'provinces.id', '=', 'stores.province_id')
                            ->leftJoin(DB::raw('cities'), 'cities.id', '=', 'stores.city_id')
                            ->where('name', $store_name)->first();

        return view('administrator.orders.detail', ['orders' => $orders, 'order_billing' => $order_billing, 'order_shipping' => $order_shipping, 'order_items' => $order_items, 'store_data' => $store_data]);
    }

    public function updateStatus(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "updateStatus")) {
            abort(403);
        }

        $send_email = [];
        $orders = $request->id;

        foreach ($orders as $order) {
            $data_update = [
                'status' => $request->status,
            ];
            $_orders = Orders::where(["id" => $order]);
            $_orders->update($data_update);

            // Orders::where(["id" => $order])->update($data_update);

            if ($request->status == 'shipping') {
                $resi = "resi-$order";
                $data_status = [
                    'resi' => $request->$resi,
                ];

                OrderShippings::where(["order_id" => $order])->update($data_status);
                $_orders = $_orders->first();
                // $send_email [] = [
                //     'email' => $_orders->email,
                //     'invoice_number' => $_orders->invoice_number,
                //     'resi' => $request->$resi,
                //     'name' => $_orders->name,
                //     'total' => number_format($_orders->total, 2, ",", ".")
                // ];
            }

        }

        if (!empty($send_email) || $send_email !== []) {
            foreach ($send_email as $send) {
                $data_email = [
                    'email_to' => $send['email'],
                    'invoice_number' => $send['invoice_number'],
                    'resi' => $send['resi'],
                    'name' => $send['name'],
                    'total' => $send['total']
                ];

                // if($send !== null)
                    // $this->sendEmailResi($data_email);
            }
        }

        return redirect('/admin/orders');

    }

    public function paymentConfirmation(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "paymentConfirmation")) {
            abort(403);
        }

        $id = $request->ix;

        $order = Orders::select(DB::raw('orders.*, customers.name as customer_name, customers.email as customer_email'))
            ->leftJoin(DB::raw('customers'), 'customers.id', '=', 'orders.customer_id')
            ->where('orders.id', '=', $id);

        $order = $order->first();

        $order_billing = OrderBillings::select(DB::raw('order_billings.*'))
            ->where('order_id', '=', $id)
            ->first();

        $billing = (array) json_decode($order_billing->data);

        if (!is_array($billing)) {
            $billing = array();
        }

        if($request->status == 'paid') {
            $data["status"] = "paid";
            $data_order["status"] = "processed";
        } else {
            $data["status"] = "unpaid";
            $data_order["status"] = "waiting_for_payment";
            $data_email = [
                'email_to' => $order->customer_email,
                'invoice_number' => $order->invoice_number
            ];
            $this->sendEmail($data_email);
        }

        $order_order = Orders::where("id", $order->id)->update($data_order);
        $order_billing = OrderBillings::where("order_id", $order->id)->update($data);
    }

    // NANTI HARUS PAKE JOB QUEQUE
    public function sendEmail($params) {
        $toEmail = $params['email_to'];
        $data    = [
            "subject" => "Konfirmasi Pembayaran",
            "invoice_number" => $params['invoice_number'],
            "messages" => "<h3>Pembayaran Anda tidak valid</h3>
                            Pelanggan Kijang Mas Yth,<br><br>
                            Email ini anda terima karena anda atau seseorang dengan menggunakan email ini telah melakukan pemesanan produk di website Kijang Mas.<br>
                            Jika anda tidak merasa melakukan pemesanan tersebut maka abaikan email ini.<br>
                            Namun jika anda memang benar telah melakukan pemesanan maka segera selesaikan pemesanan anda. <br>
                            Anda bisa melihat detail pemesanan "
        ];
        Mail::to($toEmail)->send(new DynamicEmail($data));
    }

    public function sendEmailResi($params) {
        $toEmail = $params['email_to'];
        $data    = [
            "subject" => "Pemberitahuan pengiriman",
            "invoice_number" => $params['invoice_number'],
            "messages" => "<h3>Produk anda sedang dikirimkan</h3>
                            Pelanggan Kijang Mas Yth,<br><br>
                            Produk yang anda pesan telah dikirimkan. Berikut rincian transaksi anda : <br>
                            <br>
                            <strong>Nama Penerima      : </strong> <span> ".$params['name']." </span> <br>
                            <strong>Invoice            : </strong> <span> ".$params['invoice_number']." </span> <br>
                            <strong>No Resi Pengiriman : </strong> <span> ".$params['resi']." </span> <br>
                            <strong>Total Harga        : </strong> <span>  Rp. ".$params['total']." </span> <br>
                            <br>
                            Mohon mengunggu produk sampai di tujuan anda.<br>
                            Anda bisa melihat detail pemesanan "
        ];
        Mail::to($toEmail)->send(new DynamicEmail($data));
    }
}



