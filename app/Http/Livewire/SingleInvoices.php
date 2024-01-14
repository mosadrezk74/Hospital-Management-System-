<?php
namespace App\Http\Livewire;

use App\Models\FundBox;
use App\Models\FundPatientBox;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\single_invoice;


class SingleInvoices  extends Component
{
    public $InvoiceSaved,$InvoiceUpdated;
    public $show_table = true;
    public $tax_rate = 17;
    public $updateMode = false;
    public $price,$discount_value = 0 ,$patient_id,$doctor_id,$section_id,$type,$Service_id,$single_invoice_id;



    public function get_section()
    {
        $this->section_id = DB::table('doctors')->where('id', $this->doctor_id)->value('section_id');

    }


    public function get_price()
    {
        $this->price = DB::table('services')->where('id', $this->Service_id)->value('price');
    }

    public function show_form_add(){
        $this->show_table = false;
    }

    public function print($id)
    {
        $single_invoice = single_invoice::findorfail($id);
        return Redirect::route('Print_single_invoices',[
            'invoice_date' => $single_invoice->invoice_date,
            'doctor_id' => $single_invoice->Doctor->name,
            'section_id' => $single_invoice->Section->name,
            'Service_id' => $single_invoice->Service->name,
            'type' => $single_invoice->type,
            'price' => $single_invoice->price,
            'discount_value' => $single_invoice->discount_value,
            'tax_rate' => $single_invoice->tax_rate,
            'total_with_tax' => $single_invoice->total_with_tax,
        ]);

    }





    public function store()
    {


        if($this->type == 1){

            $single_invoices = new single_invoice();
            $single_invoices->invoice_date = date('Y-m-d');
            $single_invoices->patient_id = $this->patient_id;
            $single_invoices->doctor_id = $this->doctor_id;
            $single_invoices->section_id =$this->section_id;
            $single_invoices->Service_id = $this->Service_id;
            $single_invoices->price = $this->price;
            $single_invoices->discount_value = $this->discount_value;
            $single_invoices->tax_rate = $this->tax_rate;
            // قيمة الضريبة = السعر - الخصم * نسبة الضريبة /100
            $single_invoices->tax_value = ($this->price -$this->discount_value) * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100);
            // الاجمالي شامل الضريبة  = السعر - الخصم + قيمة الضريبة
            $single_invoices->total_with_tax = $single_invoices->price -  $single_invoices->discount_value + $single_invoices->tax_value;
            $single_invoices->type = $this->type;
            $single_invoices->save();

            $fund_accounts = new FundBox();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->single_invoice_id = $single_invoices->id;
            $fund_accounts->Debit = $single_invoices->total_with_tax;
            $fund_accounts->credit = 0.00;
            $fund_accounts->save();
            $this->InvoiceSaved =true;
            $this->show_table =true;

        }else{

            $single_invoices = new single_invoice();
            $single_invoices->invoice_date = date('Y-m-d');
            $single_invoices->patient_id = $this->patient_id;
            $single_invoices->doctor_id = $this->doctor_id;
            $single_invoices->section_id =$this->section_id;

            $single_invoices->Service_id = $this->Service_id;
            $single_invoices->price = $this->price;
            $single_invoices->discount_value = $this->discount_value;
            $single_invoices->tax_rate = $this->tax_rate;
            // قيمة الضريبة = السعر - الخصم * نسبة الضريبة /100
            $single_invoices->tax_value = ($this->price -$this->discount_value) * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100);
            // الاجمالي شامل الضريبة  = السعر - الخصم + قيمة الضريبة
            $single_invoices->total_with_tax = $single_invoices->price -  $single_invoices->discount_value + $single_invoices->tax_value;
            $single_invoices->type = $this->type;
            $single_invoices->save();

            $patient_accounts = new FundPatientBox();
            $patient_accounts->date = date('Y-m-d');
            $patient_accounts->single_invoice_id = $single_invoices->id;
            $patient_accounts->patient_id = $single_invoices->patient_id;
            $patient_accounts->Debit = $single_invoices->total_with_tax;
            $patient_accounts->credit = 0.00;
            $patient_accounts->save();
            $this->InvoiceSaved =true;
            $this->show_table =true;
        }

    }

    public function render()
    {
        return view('livewire.SingleInvoices.single-invoices', [
            'single_invoices'=> single_invoice::all(),
            'Patients'=> Patient::all(),
            'Doctors'=> Doctor::all(),
            'Services'=> Service::all(),
            'subtotal' => $Total_after_discount = ((is_numeric($this->price) ? $this->price : 0)) - ((is_numeric($this->discount_value) ? $this->discount_value : 0)),
            'tax_value'=> $Total_after_discount * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100)
        ]);
    }


    public function edit($id){

        $this->show_table = false;
        $this->updateMode = true;
        $single_invoice = single_invoice::findorfail($id);
        $this->single_invoice_id = $single_invoice->id;
        $this->patient_id = $single_invoice->patient_id;
        $this->doctor_id = $single_invoice->doctor_id;
        $this->section_id = DB::table('sections')->where('id', $single_invoice->section_id)->first()->name;
        $this->Service_id = $single_invoice->Service_id;
        $this->price = $single_invoice->price;
        $this->discount_value = $single_invoice->discount_value;
        $this->type = $single_invoice->type;





    }
    public function delete($id){

        $this->single_invoice_id = $id;

    }

    public function destroy(){
        single_invoice::destroy($this->single_invoice_id);
        return redirect()->to('/SingleInvoices');


    }


}
