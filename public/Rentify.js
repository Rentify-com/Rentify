//responsive menu(bisa mode mobile)
var tombolMenu = $(".tombol-menu");
var menu = $("nav .menu ul");

function klikMenu(){
    tombolMenu.click(function(){
        menu.toggle()
    });
    menu.clik(function(){
        menu.toggle();
    });
}

$(document).ready(function(){
    var width = $(window).width();
    if(width < 990){
        klikMenu();
    }
})

//check lebar
$(window).resize(function(){
    var width = $(window).width();
    if(width>989){
        menu.css("display","block");
        //klo di css snytaxny display:block
    }else{
        menu.css("display","none")
    }
    klikMenu();
});

//efek scroll
$(document).ready(function(){
    var scroll_pos = 0;
    $(document).scroll(function(){
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 0){
            $("nav").addClass("putih");
            $("nav img.hitam").show();
            $("nav img.putih").hide();
        }else{
            $("nav").removeClass("putih");
            $("nav img.hitam").hide();
            $("nav img.putih").show();
        }
    })
});

//Multiple select button buat milih jam
class CustomSelect {
    constructor(originalSelect) {
      this.originalSelect = originalSelect;
      this.customSelect = document.createElement("div");
      this.customSelect.classList.add("select");
  
      this.originalSelect.querySelectorAll("option").forEach((optionElement) => {
        const itemElement = document.createElement("div");
  
        itemElement.classList.add("select__item");
        itemElement.textContent = optionElement.textContent;
        this.customSelect.appendChild(itemElement);
  
        if (optionElement.selected) {
          this._select(itemElement);
        }
  
        itemElement.addEventListener("click", () => {
          if (
            this.originalSelect.multiple &&
            itemElement.classList.contains("select__item--selected")
          ) {
            this._deselect(itemElement);
          } else {
            this._select(itemElement);
          }
        });
      });
  
      this.originalSelect.insertAdjacentElement("afterend", this.customSelect);
      this.originalSelect.style.display = "none";
    }
  
    _select(itemElement) {
      const index = Array.from(this.customSelect.children).indexOf(itemElement);
  
      if (!this.originalSelect.multiple) {
        this.customSelect.querySelectorAll(".select__item").forEach((el) => {
          el.classList.remove("select__item--selected");
        });
      }
  
      this.originalSelect.querySelectorAll("option")[index].selected = true;
      itemElement.classList.add("select__item--selected");
    }
  
    _deselect(itemElement) {
      const index = Array.from(this.customSelect.children).indexOf(itemElement);
  
      this.originalSelect.querySelectorAll("option")[index].selected = false;
      itemElement.classList.remove("select__item--selected");
    }
  }
  
  document.querySelectorAll(".custom-select").forEach((selectElement) => {
    new CustomSelect(selectElement);
  });
  