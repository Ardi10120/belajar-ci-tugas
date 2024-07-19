<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


use App\Models\TransactionModel;
use App\Models\TransactionDetailModel;
use Dompdf\Dompdf;


class TransaksiAdminController extends BaseController
{
    protected $cart;
    protected $url = "https://api.rajaongkir.com/starter/";
    protected $apiKey = "457711617ff39f09a3aaf0225742dea1";
    protected $transaction;
    protected $transaction_detail;

    function __construct()
    {
        helper('number');
        helper('form');
        $this->transaction = new TransactionModel();
        $this->transaction_detail = new TransactionDetailModel();
    }
    public function index()
    {
        
        $transaction = $this->transaction->findAll();
        $data['transaction'] = $transaction;
        return view('v_transaksi', $data);
    }

    public function edit($id)
    {
        $transaction = $this->transaction->find($id);
        $dataForm = [
            'status' => $this->request->getPost('status'),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        $this->transaction->update($id, $dataForm);

        return redirect('transaksi')->with('success', 'Data Berhasil Diubah');
    }

    public function download()
    {
        // Mengambil semua transaksi dari model
        $transaksi = $this->transaction->findAll();

        // Memuat tampilan v_transaksiPDF dengan data transaksi
        $html = view('v_transaksiPDF', ['transaction' => $transaksi]);

        // Nama file PDF yang akan di-generate
        $filename = date('y-m-d-H-i-s') . '-transaksi.pdf';

        // Memuat library Dompdf
        $dompdf = new Dompdf();

        // Mengatur ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'portrait');

        // Memuat HTML ke Dompdf
        $dompdf->loadHtml($html);

        // Merender HTML menjadi PDF
        $dompdf->render();

        // Outputkan PDF ke browser untuk didownload
        $dompdf->stream($filename);
    }

}
