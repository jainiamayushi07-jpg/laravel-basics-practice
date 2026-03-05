
@php
$message="hello user";
$fruits=['apple','banana','orange'];
@endphp
<script>
    var data=@json($message);
    var fruitslist=@json($fruits);
    console.log(fruitslist);
    fruitslist.forEach(function(entry){
        alert(entry);

});
    

   alert(data);
</script>