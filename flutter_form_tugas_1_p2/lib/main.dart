import 'package:flutter/material.dart';
import 'package:flutter_form_tugas_1_p2/ui/produk_page.dart';

void main() {
  runApp(MyApp());
}

// ignore: use_key_in_widget_constructors
class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Aplikasi Flutter Pertama',
      home: ProdukPage(),
    );
  }
}
