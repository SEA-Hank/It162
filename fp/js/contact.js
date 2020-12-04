class InfoInput {
    constructor(wrapperID) {
        this.wrapper = document.getElementById(wrapperID);
        this.textSpan = this.wrapper.getElementsByTagName("span")[0];
        this.textInput = this.wrapper.getElementsByTagName("input")[0];
        this.initEvent();
    }
    wrapperOnfocus(func) {
        var eleObj = this;
        return function (e) {
            eleObj.wrapper.style.lineHeight = "20px";
            eleObj.wrapper.style.borderColor = "#f96302";
            eleObj.textSpan.classList.add("small");
            eleObj.textSpan.style.color = "#f96302";
            setTimeout(function () {
                eleObj.textInput.style.display = "block";
                eleObj.textInput.focus();
            }, 400);
        }
    };
    initEvent() {
        var clickFunc = this.wrapperOnfocus();
        this.wrapper.addEventListener("click", clickFunc);

        this.textInput.addEventListener("blur", (e) => {
            if (this.textInput.value == "") {
                this.textSpan.classList.remove("small");
                this.wrapper.style.lineHeight = "40px";
            }
            this.textSpan.style.color = "black";
            this.wrapper.style.borderColor = "black";
        })

    };
};

var dataCallBack = function (data) {
    console.log("dataCallBack : " + data);
}

var firstName = new InfoInput("firstNameWrp");
var lastName = new InfoInput("lastNameWrp");
var email = new InfoInput("emailWrp");
var phone = new InfoInput("phoneWrp");