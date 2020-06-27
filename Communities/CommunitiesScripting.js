function goToAddCommunity(){
    location.href="newCommunity.php";
}
function goToPrivateCommunities(){
    location.href="joinPrivateCommunityForm.php";
}
function browseCommunities(){
    location.href="browesAllCommunities.php";
}

function addCommunityToSession(com){
    xml = new XMLHttpRequest();
    xml.open("GET","setSessionCommunityVariable.php?communityName="+com,true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            location.href="communityPage.php";
        }
    }
}

function searchMyCommunities(){
    var searchInput = document.getElementById("myCommunities-search-input").value;
    xml = new XMLHttpRequest();
    xml.open("GET","myCommunitiesSearch.php?searchInput="+searchInput,true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            document.getElementById("myCommunities").innerHTML=xml.responseText;
        }
    }
}
function allCommunitiesSearch(){
    var searchInput = document.getElementById("allCommunities-search-input").value;
    xml = new XMLHttpRequest();
    xml.open("GET","allCommunitiesSearch.php?searchInput="+searchInput,true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            document.getElementById("AllCommunities").innerHTML=xml.responseText;
        }
    }
}

function getCommuniteis(){
    xml = new XMLHttpRequest();
    xml.open("GET","getMyCommunities.php",true);
    xml.send();

    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            document.getElementById("myCommunities").innerHTML=xml.responseText;
        }
    }
}

var Availability="public";
var Category = "University";
function setAvailability(A){
    Availability=A;
}
function setCategory(C){
    Category=C;
}

function addCommunity(){
    var communityName = document.getElementById("community-name").value;
    var availability= Availability;
    var category = Category;
    var communityDescription = document.getElementById("community-disc").value;

    if(communityName=="" || communityDescription==""){
        //document,getElementById("community-error-message").style.visibility = "";
        if(communityName==""){
            document.getElementById("community-name").style.borderColor="red";
        }
        if(communityDescription==""){
            document.getElementById("community-disc").style.borderColor="red";
        }
    }
    else{
        xml = new XMLHttpRequest();
        xml.open("GET","addCommunity.php?communityName="+communityName+"&communityDescription="+communityDescription+"&category="+category+"&availability="+availability,true);
        xml.send();

        xml.onreadystatechange=function(){
            if(xml.readyState==4){
                alert(xml.responseText);
            }
        }
    }
}

function getAllCommuniteis(){
    xml = new XMLHttpRequest();
    xml.open("GET","getAllCommunities.php",true);
    xml.send();

    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            document.getElementById("AllCommunities").innerHTML=xml.responseText;
        }
    }
}


function joinCommunity(com){
    var communityName = com;
    xml = new XMLHttpRequest();
    xml.open("GET","joinCommnuity.php?communityName="+communityName,true);
    xml.send();

    xml.onreadystatechange=function(){
        if(xml.readyState==4){
                alert(xml.responseText);
        }
    }
}

function leaveCommunity(com){
    var communityName = com;
    xml = new XMLHttpRequest();
    xml.open("GET","leaveCommnuity.php?communityName="+communityName,true);
    xml.send();

    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            alert(xml.responseText);
        }
    }
}

function joinPrivateCommunities(){
    
    var communityName = document.getElementById("private-community-name").value;
    var communityID = document.getElementById("private-community-id").value;

    xml = new XMLHttpRequest();
    xml.open("GET","joinPrivateCommunity.php?communityName="+communityName+"&communityID="+communityID,true);
    xml.send()

    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            alert(xml.responseText);
        }
    }
}

function communityPageStart(){
    $("#message-textarea").hide();
    xml = new XMLHttpRequest();
    xml.open("GET","GetTheMessages.php",true);
    xml.send();

    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            document.getElementById("main").innerHTML=xml.responseText;
        }
    }
}

function goToManagingPage(com){
    xml = new XMLHttpRequest();
    xml.open("GET","setSessionCommunityVariable.php?communityName="+com,true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            location.href="communityManagementPage.php";
        }
    }
}

function manage(){
    xml = new XMLHttpRequest();
    xml.open("GET","communityManagementControl.php",true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            document.getElementById("members").innerHTML=xml.responseText;
        }
    }
}

function removePart(id){
    xml = new XMLHttpRequest();
    xml.open("GET","removePart.php?id="+id,true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            alert(xml.responseText);
        }
    }
}

function showTexrarea(){
    location.href="#message-textarea";
    $("#message-textarea").fadeToggle(1000);
}
function setMessageToSession(){
    var TextareaInput = encodeURIComponent(CKEDITOR.instances.editor1.getData());
    xml = new XMLHttpRequest();
    xml.open("GET","setSessionMessageVariable.php?TextareaInput="+TextareaInput,true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            alert(xml.responseText);
        }
    }
}
function sendTheMessage(){
    var TextareaInput = encodeURIComponent(CKEDITOR.instances.editor1.getData());
    xml = new XMLHttpRequest();
    xml.open("GET","sendMessage.php?TextareaInput="+TextareaInput,true);
    xml.send();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            alert(xml.responseText);
        }
    }
}