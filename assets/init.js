const carousel=$('#blog-carousel')[0]
async function  f() {
    const res=await fetch('../data.json',{
        method:'get'
    })
    const data= await res.json()
    return data.posts
}
f().then((data)=>{
    data.forEach((post)=>{
        if(window.location.pathname.includes(post.path)){
            return
        }
        carousel.innerHTML+=`
	<div class="blog-carousel_item">
        <img src="${post.img}" alt="image">
        <span class="blog-carousel_item-title px-3">${post.title}</span>
        <span class="blog-carousel_item-text color-gray px-3">${post.desc[0]}</span>
        <div class="blog-coursel_item-footer px-3">
            <span class="color-gray blog-coursel_item-date">${post.date}</span>
            <a class="blog-coursel_item-read" href="${post.link}">Читать дальше</a>
        </div>
    </div>
`
    })
    $('#blog-carousel').slick({
        slidesToShow: 4,
        slidesToScroll:4,
        variableWidth: true,
        centerMode: true,
    })
})
