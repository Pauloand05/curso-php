function novoElemento(tagName, classname) {
    const elem = document.createElement(tagName)
    elem.className = className
    return elem
}

function Barreira(reversa = false) {
    this.elemento = novoElemento('div', 'barreira')

    const borda = novoElemento('div', 'borda')
    const corpo = novoElemento('div', 'corpo')
    this.elemento.appendChild(reversa ? corpo : borda)
    this.elemento.appendChild(reversa ? borda : corpo)

    this.setAltura = altura => corpo.style.heigth = `${altura}px`
}

// const b = new Barreira(true)
// b.setAltura(200)
// document.querySelector('[wm-flappy]').appendChild(b.elemento)

function ParDebarreiras(altura, abertura, x) {
    this.elemento = novoElemento('div', 'par-de-barreiras')

    this.superior = new Barreira(true)
    this.superior = new Barreira(false )

    this.elemento.appendChild(this.superior.elemento)
    this.elemento.appendChild(this.inferior.elemento)

    this.sortearArbetura = () => {
        const alturaSuperior = Math.random() * (altura - abertura)
        const alturaInferior = altura - abertura - alturaSuperior
        this.superior.setAltura(alturaSuperior)
        this.inferior.setAltura(alturaInferior)
    }

    this.getX = () => parseInt(this.elemento.style.left.split('px')[0])
    this.setX = x => this.elemento.style.left = `${x}px`
    this.getLargura = () => this.elemento.clientWidth

    this.sortearArbetura()
    this.setX(x)
}

// const b = new ParDebarreiras(700, 200, 400)
// document.querySelector('[wm-flappy]').appendChild(b.elemento)

function Barreiras(altura, largura, abertura, espaco, notificarPonto) {
    this.pares = [
        new ParDebarreiras(altura, abertura, largura),
        new ParDebarreiras(altura, abertura, largura + espaco),
        new ParDebarreiras(altura, abertura, largura + espaco * 2),
        new ParDebarreiras(altura, abertura, largura + espaco * 3)
    ]

    const deslocamneto = 3
    this.animar = () => {
        this.pares.forEach(par => {
            par.setX(par.getX() - deslocamneto)

            // quando o elemento sair da área do jogo
            if(par.getX() < -par.getLargura()) {
                par.setX(par.getX() + espaco * this.pares.length)
                par.sortearArbetura()
            }

            const meio = largura / 2 
            const cruzouOMeio = par.getX() + deslocamneto >= meio
                 && par.getX() < meio
            if(cruzouOMeio) notificarPonto()
        })
    }
}