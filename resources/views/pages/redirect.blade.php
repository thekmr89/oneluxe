<form id="paymentForm" method="POST" action="{{ $gatewayUrl }}">
    <input type="hidden" name="encRequest" value="{{ $encRequest }}">
    <input type="hidden" name="access_code" value="{{ $accessCode }}">
    <input type="submit">
</form>
 <script>
    document.getElementById('paymentForm').submit();
    //alert('hello');
</script>
 