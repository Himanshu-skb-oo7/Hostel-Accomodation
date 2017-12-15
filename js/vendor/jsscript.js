var select=0;
var selectedroom=new Array();

$("#btn").on("click",function () {

    $.post("roomselect.php",
        {
            room1:selectedroom,
            Roll_No: parseInt(document.getElementById("Roll_No").innerHTML)
        });

        setTimeout(window.location.assign("thankyou.html"),1500);
    });

$(".button").on("click",function () {

    if(this.style.backgroundColor!= "dodgerblue")
    {

        if(select>=20)
            alert("More than 20 are selected !!");
        else
        {
            selectedroom.push(this.innerHTML);
            this.style.backgroundColor="dodgerblue";
            select++;
        }
    }

    else
    {
        selectedroom.pop();

        if(this.innerHTML.length<5)
          this.style.backgroundColor= "#4CAF50";
        else
          this.style.backgroundColor="black";

        select--;
    }

    for(var i=0;i<selectedroom.length;i++)
        console.log(selectedroom[i]);
});




