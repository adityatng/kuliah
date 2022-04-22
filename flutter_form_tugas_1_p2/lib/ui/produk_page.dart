import 'package:flutter_form_tugas_1_p2/ui/produk_form.dart';
import 'package:flutter_form_tugas_1_p2/ui/produk_detail.dart';
import 'package:flutter/material.dart';

class ProdukPage extends StatefulWidget {
  @override
  _ProdukPageState createState() => _ProdukPageState();
}

class _ProdukPageState extends State<ProdukPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Data Produk"),
        actions: [
          GestureDetector(
            //menampilkan icon +
            child: Icon(Icons.add),
            //pada saat icon + di tap
            onTap: () async {
              //berpindah kehalaman ProdukForm
              Navigator.push(context,
                  new MaterialPageRoute(builder: (context) => ProdukForm()));
            },
          )
        ],
      ),
      body: ListView(
        children: [
          //list 1
          Card(
            child: ListTile(
              title: Text("kulkas"),
              subtitle: Text("250000"),
            ),
          ),
          //list 2
          Card(
            child: ListTile(
              title: Text("TV"),
              subtitle: Text("500000"),
            ),
          ),
          //list 3
          Card(
            child: ListTile(
              title: Text("Mesin cuci"),
              subtitle: Text("1500000"),
            ),
          ),
        ],
      ),
    );
  }
}

class ItemProduk extends StatelessWidget {
  final String kodeProduk;
  final String namaProduk;
  final int harga;

  //membuat contructor
  ItemProduk(
      {required this.kodeProduk,
      required this.namaProduk,
      required this.harga});

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      child: Card(
        child: ListTile(
          title: Text(namaProduk),
          subtitle: Text(harga.toString()),
        ),
      ),
      onTap: () {
        Navigator.of(context).push(new MaterialPageRoute(
            builder: (context) => ProdukDetail(
                  kodeProduk: kodeProduk,
                  namaProduk: namaProduk,
                  harga: harga,
                )));
      },
    );
  }
}
