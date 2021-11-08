const carousel=$('#blog-carousel')[0]
async function  f() {
    const res=await fetch('../../data.json',{
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
                <amp-img src="../${post.img}" alt="image" 
                                                     height="190"
                                                     layout="fixed-height"></amp-img>
                <span class="blog-carousel_item-title px-3">${post.titleUA}</span>
                <span class="blog-carousel_item-text color-gray px-3">${post.desc[0]}</span>
                <div class="blog-coursel_item-footer px-3">
                    <span class="color-gray blog-coursel_item-date">${post.date}</span>
                    <a class="blog-coursel_item-read" href="${post.link.replace('/testmetick/','/testmetick/ua/')}">Читать дальше</a>
                </div>
            </div>
        `
    })
    if (window.screen.width < 1024) {
        $('#blog-carousel').slick({
            infinite: false,
            variableWidth: true,
            swipeToSlide: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        })
    }else{
        $('#blog-carousel').slick({
            infinite: false,
            variableWidth: true,
            swipeToSlide: true,
            slidesToShow: 4,
            slidesToScroll: 4,
        })
    }

})
