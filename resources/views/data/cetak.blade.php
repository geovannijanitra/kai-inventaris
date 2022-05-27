<!DOCTYPE html>
<html>
<head>
	<title>SKTM No.{{ $noInventory }}</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;

  			margin-left: auto;
  			margin-right: auto;
        }


        table td .text2 {
            color: white;
		}

		table tr td {
			font-size: 13px;
		}
        .ttd{
        	text-align: center;
        }
	</style>
</head>
<body>
	<center>
		<div>
            <table>
                <td style="width: 35%;">
                    <img align="center" src="{{ asset('theme') }}/assets/img/logo.png" width="100" height="100">
                </td>
                <td align="center" style="width: 60%;">
                        <font size="40px"><b>AR</b></font><br>
                        <font size="16px">{{ $noInventory }}</font><br>
                </td>
            </table>
        </div>
		</table><br><br>
	</center>
</body>
</html>
