<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
use Illuminate\Support\Arr;


class SalesInvoice extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('SalesRecord.SalesInvoice.viewsalesinvoice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $poNo = db::table('client_po')
            ->get();

        return view('SalesRecord.SalesInvoice.addsalesinvoice')
            ->with('poNo', $poNo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());

        try{
            $fullypaid = '';

            if($request -> balAmount == '0.00'){
                $fullypaid = 1;
            }else{
                $fullypaid = 0;
            }

            $sales_invoice = array([
                'INVOICE_NO' => $request -> invoiceNo,
                'INVOICE_DATE' => $request -> invoiceDate,
                'DEPOSIT' => (str_replace( ',', '', $request -> depositAmt)),
                'DOWNPAYMENT' => (str_replace( ',', '', $request -> downPay)),
                'BALANCE' => (str_replace( ',', '', $request -> balAmount)),
                'TOTAL' => (str_replace( ',', '', $request -> grandTotal)),
                'SALESREPID' => $request -> issuedId,
                'RECEIVED_BY' => $request -> recBy,
                'RECEIVED_DATE' => $request -> recDate,
                'CLIENT_ID' => $request -> custDetails,
                'FULLY_PAID' => $fullypaid,
                'CYLINDER_ENTRY' => $request -> cylinderType,
                'CYLINDER_IDS' => $request -> inputtedTypeId ,
            ]);

//            $sales_invoice_insert = db::table('sales_invoice')
//                ->insert($sales_invoice);

            $sales_invoice_order = '';

            for($i = 0; $i < count($request -> productCode) ; $i++ ){
                $sales_invoice_order = array([
                    'INVOICE_NO' => $request -> invoiceNo,
                    'INVOICE_DATE' => $request -> invoiceDate,
                    'PRODUCT' => $request -> productCode[$i],
                    'SIZE' => $request -> productSize[$i],
                    'UNIT_PRICE' => $request -> productPrice[$i],
                    'QTY' => $request -> productQty[$i]
                ]);

//                $sales_invoice_order_insert = db::table('sales_invoice_order')
//                    ->insert($sales_invoice_order);
            }

            $sales_invoice_po = array([
                'INVOICE_NO' => $request -> invoiceNo,
                'INVOICE_DATE' => $request -> invoiceDate,
                'SALESREPID' => $request -> issuedId,
                'CLIENT_ID' => $request -> custDetails,
                'PO_NO' => $request -> poNo
            ]);

//            $sales_invoice_po_insert = db::table('sales_invoice_po')
//                ->insert($sales_invoice_po);
            $sales_invoice_report = array();

            for($i = 0; $i < count($request -> productCode) ; $i++ ) {

                $product_qty = "";

                if($request -> productCode[$i] == "C2H2"){
                       $sales_invoice_report = array_add($sales_invoice_report, 'C2H2', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "AR"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'AR', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "CO2"){
                    $sales_invoice_report = array_merge('CO2', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "IO2"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'IO2', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "LPG"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'LPG', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "MO2"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'MO2', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "N2"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'N2', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "N20"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'N20', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "H"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'H', $request -> productQty[$i]);
                }
                if($request -> productCode[$i] == "COMPMED"){
                    $sales_invoice_report = array_add($sales_invoice_report, 'COMPMED', $request -> productQty[$i]);
                }




            }
            dd($sales_invoice_report);









        }catch (Exception $e){
            return response()->json(array('error' => $e));
        }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
