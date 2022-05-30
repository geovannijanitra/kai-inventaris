<!DOCTYPE html>
<html>
<head>
	<title>Stiker {{ $noInventory }}</title>
	<style type="text/css">
		table {
			border-style: solid;
			border-width: 1px;
  			margin-left: auto;
  			margin-right: auto;
			padding-left: 20px;
			padding-right: 20px;
        }
		/* td{
			padding-top: -15px;
			padding-bottom: -15px;
		} */
		.ar{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<center>
		<div>
            <table>
                <td style="padding-right: 20px">
                    <img align="center" src="{{ asset('theme') }}/assets/img/logo.png" width="100" height="100">
                </td>
                <td align="center" ><br>
						<div class="ar"><font size="20px"><b>AR</b></font><br></div>
                        <font size="16px">{{ $noInventory }}</font><br>
                </td>
            </table>
        </div>
	</center>
</body>
</html>
