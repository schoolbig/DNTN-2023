import 'dart:convert';
import 'package:http/http.dart' as http;

final String apiUrl =
    'https://sv.bdu.edu.vn/api/auth/login'; // Đường dẫn của API đăng nhập

Future<Map<String, dynamic>> login(String username, String password) async {
  final Map<String, dynamic> data = {
    'username': "18050287",
    'password': "091786aZ",
    'grant_type': 'password',
  };

  final response = await http.post(
    Uri.parse(apiUrl),
    headers: {
      'Content-Type':
          'application/x-www-form-urlencoded', // Đặt kiểu dữ liệu gửi đi là form-urlencoded
    },
    body: data,
  );

  if (response.statusCode == 200) {
    return jsonDecode(response.body);
  } else {
    print(response.body);
    throw Exception('Failed to log in');
  }
}
