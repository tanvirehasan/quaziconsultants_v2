<?php

include('inc/function.php');

echo email_send("Test Mail", "Client Inquiry", "

Name: TANVIR HASAN <br>
Designation: Software Engineer <br>
Organization: Quazi Consultants <br>
Phone Number: 01843640517 <br>
Email: tanvirhasanbcse@gmail.com <br>
Services: Consultancy <br><br>
Message: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br>

", "quazi.consultants@gmail.com");
