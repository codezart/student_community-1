// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).ready(function(){ 

    // send username to php add new username
    $("#changeBtn").on('click', function(e){
        e.preventDefault();

        let newUsername = $("#newusernameText").val();

        let user ={
            "newUsername": newUsername
        };

        $.ajax({
            url: "ChangeUserInfo.php",
            type: "POST",
            data: user,
            success: function(){
                alert("username changed successfully");
            }
        });


    });


});