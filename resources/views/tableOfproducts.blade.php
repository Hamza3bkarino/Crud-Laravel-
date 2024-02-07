
<a href="/create"><button id='Add'>Add Product</button></a>
<br>
<br>
<table  >
    <thead >
        <th>RefPdt</th>
        <th>LibPdt</th>
        <th>Prix</th>
        <th>Qte</th>
        <th>description</th>
        <th>image</th>
        <th>type</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($all_tables as $all_table)
        <tr>
            <td>{{$all_table->RefPdt}}</td>
            <td>{{$all_table->LibPdt}}</td>
            <td>{{$all_table->Prix}}</td>
            <td>{{$all_table->Qte}}</td>
            <td>{{$all_table->description}}</td>
            <td><img src="storage/{{ $all_table->image }}" alt="" srcset="" width='130'></td>
            <td>{{$all_table->type}}</td>
            <td id='action'><a href="/{{$all_table->RefPdt}}/edit"><button id='edit'>Edit</button></a>  <a href="/{{$all_table->RefPdt}}/show"><button id='show'>Show</button></a> 
            <form action="/products/{{$all_table->RefPdt}}" method="post">
                @csrf 
                @method('DELETE')
                <button type="submit" id='delete'>Delete</button>
            </form></td>
        </tr>
        @endforeach
    </tbody>
</table>
<style>
#Add,#delete,#edit,#show{
    border:none;
    border-radius:7px;
    background-color:#2ac442;
    cursor: pointer;
    font-weight:bolder;
    font-family:monospace;
    font-size:23px;
    text-align:center;
    padding:10px 17px ;
}
table{
    width: 95%;
    font-family: math;
    font-size: 20px;
}
th,td{
    padding: 10px 15px;
}
thead{
    background: darkseagreen;
}
tbody tr{
    background: cadetblue;
}
#action{
    width: 90%;
    display: flex;
    justify-content: space-around;
    margin:50px 0;
}
#delete,#edit,#show{
    font-size:16px;
    color:white;
}
#delete{
    background-color:red;
}
#edit{
    background-color:green;
}
#show{
    background-color:blue;
}
</style>