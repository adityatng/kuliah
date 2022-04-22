import 'package:flutter/material.dart';
import 'package:flutter_form_tugas_1_p2/ui/produk_detail.dart';

class ProdukForm extends StatefulWidget {
  @override
  _ProdukFormState createState() => _ProdukFormState();
}

class _ProdukFormState extends State<ProdukForm> {
  final _kodeProdukTextboxController = TextEditingController();
  final _namaProdukTextboxController = TextEditingController();
  final _hargaProdukTextboxController = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Form Produk'),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            _textboxKodeProduk(),
            _textboxNamaProduk(),
            _textboxHargaProduk(),
            _tombolSimpan()
          ],
        ),
      ),
    );
  }

  _textboxKodeProduk() {
    return TextField(
      decoration: InputDecoration(labelText: 'Kode Produk'),
      controller: _kodeProdukTextboxController,
    );
  }

  _textboxNamaProduk() {
    return TextField(
      decoration: InputDecoration(labelText: 'Nama Produk'),
      controller: _namaProdukTextboxController,
    );
  }

  _textboxHargaProduk() {
    return TextField(
      decoration: InputDecoration(labelText: 'Harga Produk'),
      controller: _hargaProdukTextboxController,
    );
  }

  _tombolSimpan() {
    return RaisedButton(
      child: Text('Simpan'),
      onPressed: () {
        String kode_produk = _kodeProdukTextboxController.text;
        String nama_produk = _namaProdukTextboxController.text;
        int harga = int.parse(_hargaProdukTextboxController.text);

        Navigator.of(context).push(new MaterialPageRoute(
            builder: (context) => ProdukDetail(
                  kodeProduk: kode_produk,
                  namaProduk: nama_produk,
                  harga: harga,
                )));
      },
    );
  }
}
