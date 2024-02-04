/* <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
*/
(function(){
    emailjs.init("AV-s3ZE1_jYNeIi8K");
})(); 

const serviceID ="service_utsop8f";
const templateID="template_vk3iw92";
loader = document.querySelector(".loader");

document.getElementById("submit").addEventListener("click",function() {
     loader.style.display="block";
    var params = {
        Fname:document.getElementById("FirstN").value ,
        Lname:document.getElementById("LastN").value ,
        email:document.getElementById("email").value ,
        message:document.getElementById("comment").value ,
    }
    
    emailjs.send(serviceID,templateID,params)
.then(
    res => {
        document.getElementById("FirstN").value="" ;
        document.getElementById("LastN").value="" ;
        document.getElementById("email").value="" ;
        document.getElementById("comment").value="" ;
        // console.log(res);
        loader.style.display="none";
        setTimeout(function(){ 
            alert("message send successfully")
        },1000)
    })
.catch((err) =>{ console.log(err); alert("feiled...")})
})
