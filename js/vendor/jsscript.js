var select=0;
var selectedroom=new Array();

$("#btn").on("click",function () {

    $.post("roomselect.php",
        {
            room1:selectedroom,
            Roll_No: parseInt(document.getElementById("Roll_No").innerHTML)
        });
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
            $(this).removeAttr('style');
            select--;
        }

        for(var i=0;i<selectedroom.length;i++)
            console.log(selectedroom[i]);


});




