import HystModal from "hystmodal";

export const modal = new HystModal({
  linkAttributeName: "data-hystmodal",
});

const modalOrder = document.getElementById("modal-order");
const modalOrderButtons =
  document.querySelectorAll("[data-hystmodal-order]") || [];
modalOrderButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();

    modalOrder.querySelector(".order-form-products").style.display = button.dataset.hystmodalOrder ? 'none' : 'block'
    modalOrder.querySelector('[name="pre-product"]').value = button.dataset.hystmodalOrder ? button.dataset.hystmodalOrder : ''
    modalOrder.querySelector(".order-form-headline__subtitle").innerHTML = button.dataset.hystmodalOrder ? `
    Вы выбрали вид <strong>«${button.dataset.hystmodalOrder}»</strong>.<br />
    Осталось ввести контакты, по которым мы с Вами можем связаться
    ` : '';
    modal.open("#modal-order");
  });
});
