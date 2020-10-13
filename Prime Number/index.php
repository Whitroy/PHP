<!DOCTYPE html>
<html>
<head>
	<title>
	Prime Numbers</title>
</head>
<script type="text/javascript">
	var store=prompt("Enter a number")
	var num=parseInt(store);
	var count=0
	for (var i = 2; i <= num; i++) {
		if(num%i==0)
		{
			count++;
		}
	

	}
	if(count==1)
	{
		document.write("prime")
	}
	else
	{
		document.write("not prime")
	}
</script>
</html>
