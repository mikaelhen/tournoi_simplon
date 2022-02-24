const multiStepForm = document.querySelector("[data-multi-step]");
const formSteps = [...multiStepForm.querySelectorAll("[data-step]")];

//Fonction retournant à quel "step" de formulaire nous sommes
let currentStep = formSteps.findIndex((step) => {
  return step.classList.contains("active");
});
//Si pas de classe active, remet de base à l'étape 1
if (currentStep < 0) {
  currentStep = 0;
  formSteps[currentStep].classList.add("active");
}
//Event listener pour gérer les clics
multiStepForm.addEventListener("click", (e) => {
  let incrementor;
  if (e.target.matches("[data-next]")) {
    incrementor = 1;
  } else if (e.target.matches("[data-previous]")) {
    incrementor = -1;
  } else {
    return;
  }
  //Si on ne clique pas sur un bouton
  if (incrementor == null) return;
  //Si les champs du "mini-formulaire sont remplis..."
  const inputs = [...formSteps[currentStep].querySelectorAll("input")];
  if (incrementor == 1) {
    const allValid = inputs.every((input) => input.reportValidity());
    if (allValid) {
      currentStep += incrementor;
      showCurrentStep();
    }
  } else {
    currentStep += incrementor;
    showCurrentStep();
  }
});

//Fonction pour montrer le bon formulaire
function showCurrentStep() {
  formSteps.forEach((step, index) => {
    //Si faux alors pas ajouter active donc si l'index est égal au pas alors ajouter "active"
    step.classList.toggle("active", index === currentStep);
  });
}
