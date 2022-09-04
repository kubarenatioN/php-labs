let slider = document.querySelector('.slider');
let wrapper = document.querySelector('.wrapper');
let nextBtn = document.querySelector('.arrow-next');
let prevBtn = document.querySelector('.arrow-prev');
let items = document.querySelectorAll('.slider-item');
let currdeg = 0;
let active = 0;

const defaultClass = 'slider-item'

const slides = [
    {
        visible: true,
        side: 'left',
        image: 'works-1.png',
        title: 'Chargo',
        descr: 'Мобильное приложение', 
    },
    {
        visible: true,
        side: 'front',
        active: true,
        image: 'works-2.png',   
        title: 'Exclusive Group',
        descr: 'Корпоративный сайт', 
    },
    {
        visible: true,
        side: 'right',
        image: 'works-3.png',
        title: 'Chargo',
        descr: 'Мобильное приложение', 
    },
    {
        visible: false,
        image: 'works-1.png',
        title: 'FishOn',
        descr: 'Мобильное приложение', 
    },
    {
        visible: false,
        image: 'works-2.png',
        title: 'Exclusive Group',
        descr: 'Корпоративный сайт', 
    },
    {
        visible: false,
        image: 'works-3.png',
        title: 'Chargo',
        descr: 'Мобильное приложение', 
    },
    {
        visible: false,
        image: 'works-1.png',
        title: 'FishOn',
        descr: 'Мобильное приложение', 
    },
    {
        visible: false,
        image: 'works-2.png',
        title: 'Exclusive Group',
        descr: 'Корпоративный сайт', 
    },
    {
        visible: false,
        image: 'works-3.png',
        title: 'Chargo',
        descr: 'Мобильное приложение', 
    },
]

function initSlider(config) {
    config.forEach(s => {
        const el = document.createElement('a')
        el.href = '#'
        const img = document.createElement('img')
        img.src = `images/${s.image}`
        const title = document.createElement('h4')
        title.textContent = s.title
        const descr = document.createElement('p')
        descr.textContent = s.descr
        el.append(img, title, descr)
        el.classList.add('slider-item')
        s.visible ? el.classList.add('visible') : el.classList.remove('visible')
        s.side === 'left' ? el.classList.add('left') : el.classList.remove('left')
        s.side === 'right' ? el.classList.add('right') : el.classList.remove('right')
        s.side === 'front' ? el.classList.add('front') : el.classList.remove('front')
        wrapper.append(el)
    })
}

initSlider(slides)

nextBtn.addEventListener('click', () => {
    next()
    checkButtons()
})
prevBtn.addEventListener('click', () => {
    prev()
    checkButtons()
})

function checkButtons() {
    if (slides.findIndex(s => s.active) === 1) {
        prevBtn.disabled = true
    } else if (slides.findIndex(s => s.active) === slides.length - 2) {
        nextBtn.disabled = true
    } else {
        nextBtn.disabled = false
        prevBtn.disabled = false
    }
}

function next() {
    const ind = slides.findIndex(s => s.active)
    const s = slides[ind]
    slides[ind - 1] = resetSlide(s)
    slides[ind] = makeSlideLeft(s)
    slides[ind + 1] = makeSlideFront(s)
    slides[ind + 2] = makeSlideRight(s)
    updateSlides()
}
function prev() {
    const ind = slides.findIndex(s => s.active)
    const s = slides[ind]
    slides[ind + 1] = resetSlide(s)
    slides[ind] = makeSlideRight(s)
    slides[ind - 1] = makeSlideFront(s)
    slides[ind - 2] = makeSlideLeft(s)
    updateSlides()
}

function updateSlides() {
    const items = [...wrapper.children]
    items.forEach((it, i) => {
        const classes = []

        slides[i].side ? classes.push(slides[i].side) : null,
        slides[i].visible ? classes.push('visible') : null

        it.classList = defaultClass
        it.classList.add(...classes)
    })
}

function makeSlideLeft(slide) {
    const s = Object.assign({}, slide)
    s.side = 'left'
    s.visible = true
    s.active = false
    return s
}
function makeSlideRight(slide) {
    const s = Object.assign({}, slide)
    s.side = 'right'
    s.visible = true
    s.active = false
    return s
}
function makeSlideFront(slide) {
    const s = Object.assign({}, slide)
    s.side = 'front'
    s.visible = true
    s.active = true
    return s
}
function resetSlide(slide) {
    const s = Object.assign({}, slide)
    s.side = undefined
    s.visible = false
    s.active = false
    return s
}
