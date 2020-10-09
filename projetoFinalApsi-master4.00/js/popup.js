// botão abrir 
const openModalButtons = document.querySelectorAll('[data-modal-target]')
// fechar botão
const closeModalButtons = document.querySelectorAll('[data-close-button]')
// motra e oculta o elemento sobreposição
const overlay = document.getElementById('overlay')

// evento abrir modal
openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

// overlay

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    // closeModal(modal)
  })
})

// evento fechar modal
closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  }) 
})

// função abrir botão
function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}
// função fechar botão
function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}