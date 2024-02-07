<form action='{{asset('/store')}}' method="post" enctype='multipart/form-data'>
    @csrf
    <label for="RefPdt">RefPdt</label>
    <input type="text" name='RefPdt'>
    <br>
    <label for="LibPdt">LibPdt</label>
    <input type="text" name='LibPdt'>
    <br>
    <label for="Prix">Prix</label>
    <input type='number' name='Prix' id='prix'>
    <br>
    <label for="Qte">Qte</label>
    <input type="number" name='Qte' id='qte'>
    <br>
    <label for="description" id='labeldesc'>description</label>
    <input type="text" name='description'>
    <br>
    <label for="image" id='labelimg'>image</label>
    <input type="file" name='image'>
    <br>
    <label for="type">type</label>
    <input type="text" name='type'>
    <br>
    <button type='submit'>Envoyer</button>
</form>
<style>
        form{
        line-height: 3;
    margin: 4% auto;
    text-align: center;
    width: 600px;
    padding: 3%;
    font-size: 18px;
    font-family: math;
    }
    label{
        margin-right: 100px;

    }
    #prix,#qte{
        margin-left: 20px;

    }
    #desc{
        margin-right: 38px;
    }
    #labelimg{
        position: relative;
        left: 61px;
    }
    #labeldesc{
        position: relative;
        left: 33px;
    }
    input{
        width: 40%;
        height:5vh;
        font-family:math;
        font-size:17px;
        padding-left:15px;
    }
    #img{
        margin-left:72px;
        padding-left:0px;
    }
    button{
        margin-left: 23%;
        padding: 10px;
        border-radius: 7px;
        font-size: 17px;
        font-family: math;
        border: none;
        font-weight: bolder;
        background: black;
        width: 40%;
        color: white;
        cursor: pointer;
    }
</style>