
var hotel = {
    nome: 'Acapulco',
    quartos: 40,
    reservados: 25,
    academia: true,
    checaDisponibilidade: function (){
        return this.quartos - this.reservados;
    }
}

var nomeHotel = document.getElementById('nomeHotel')
nomeHotel.textContent = hotel.nome

var quartos = document.getElementById('quartos')
quartos.innerHTML = hotel.quartos

var reservados = document.getElementById('reservados')
reservados.textContent = hotel.reservados

var disponiveis = document.getElementById('disponiveis')
disponiveis.textContent = hotel.checaDisponibilidade()

console.log('Academia '+hotel.academia)

hotel.academia = false;

console.log('Academia '+hotel.academia)

console.log(hotel)

hotel.piscina = true

console.log(hotel)

delete hotel.piscina