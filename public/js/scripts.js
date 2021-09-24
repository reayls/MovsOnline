document.addEventListener('click', function(e){
    if(e.target.matches(".play *")){
        e.preventDefault();
        let opcions = document.getElementById('opcions').querySelectorAll('.opcion');
        opcions.forEach(el => {
            if(el.classList.contains('active')){
                el.classList.remove('active');
            }
        });
        e.target.classList.add("active")
        let link=e.target.parentNode.getAttribute("data-href");
        let myframe=document.getElementById('myframe');
        myframe.src=link
    }
});

document.addEventListener('mouseover',function(e){  
    if(e.target.matches(".onepeli")){
        // console.log(e.target);
    }
});