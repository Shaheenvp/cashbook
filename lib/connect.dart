import 'package:shared_preferences/shared_preferences.dart';

class connect{
  static const url="http://172.20.10.2/cashbook/";
}
Future<String?> getLoginId() async {
  SharedPreferences prefs = await SharedPreferences.getInstance();
  String? login_id = prefs.getString('loginId');
  return login_id;
}

  var total = 0;
  var total_i = 0;
