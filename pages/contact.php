
<style>

label {
    font-size:20px;
    margin: 0.5rem;
}

input {
    font-size: 20px;
    border-color:rgba(14, 189, 14, 0.877);
    color: rgba(14, 189, 14, 0.877);
    background-color: #333;
    margin:1rem;
}

textarea {
    font-size: 20px;
    border-color:rgba(14, 189, 14, 0.877);
    color: rgba(14, 189, 14, 0.877);
    background-color: #333;
}

form {
    margin: 1rem;
}



</style>

<div id="contact" class="contain">


<h1> Send me a message

<form action='./index.php' method="post">


<label for="name">Name:</label>
<input name="name" type="text" id ="name" placeholder="Name">
</input>


<label for="subject">Subject:</label>
<input name="subject" id="subject" type="text" placeholder="Subject">
</input>
<br>

<label for="mail">E-Mail:</label>
<input name="mail" id="mail" type="text" placeholder="sample@email.com">
</input>
<br>
<label for="message"> Message </label><br>
<textarea name="message" id="message" rows="8" cols="30" placeholder="Enter a message here.">
</textarea>

<input value="send" type="submit" ></input>

</form>

</div>
