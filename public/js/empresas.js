const methodologiesButtons = document.getElementById("methodology-buttons");

const methodologies = [
  {
    buttonText: "PROGRAMAÇÃO",
    description: `Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
    do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.
    <br />
    <br />
    Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat.`,
    image: "./assets/images/methodology-1.png",
    active: true,
  },
  {
    buttonText: "METODOLOGIAS ÁGEIS",
    description: `Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
    do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.
    <br />
    <br />
    Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat.`,
    image: "./assets/images/methodology-1.png",
    active: false,
  },
  {
    buttonText: "RESIDÊNCIA DE SOFTWARE",
    description: `Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
    do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.
    <br />
    <br />
    Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat.`,
    image: "./assets/images/methodology-1.png",
    active: false,
  },
  {
    buttonText: "SOFT SKILLS",
    description: `Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
    do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.
    <br />
    <br />
    Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat.`,
    image: "./assets/images/methodology-1.png",
    active: false,
  },
];

const buttons = methodologies.map((data) => {
  const button = document.createElement("button");
  button.innerHTML = data.buttonText;
  button.classList.add("toodoo-button");
  if (!data.active) button.classList.add("ghost");
  return button;
});

buttons.forEach((button) => {
  methodologiesButtons.appendChild(button);
  button.addEventListener("click", () => {});
});
