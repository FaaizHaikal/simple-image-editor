<div class="slider-container">
  <label for="{{ $name }}">{{ $label }}</label>
  
  <div id="slider-wrapper">
    
    <span id="current-value">{{ $value }}</span>
    <input type="range" id="{{ $name }}" name="{{ $name }}" 
         value="{{ $value }}" 
         min="{{ $min }}" 
         max="{{ $max }}" 
         step="{{ $step }}" />    
  </div>
  <div id="mini-max">
    <span>{{ $min }}</span>
    <span>{{ $max }}</span>
  </div>
</div>

<style>
  label
  {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
  }
  input {
    width: 100%;
    margin-bottom: 10px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 200px;
    background-color: transparent;
    border-radius: 5px;
    margin-left: 5px;
    margin-right: 5px;
    transform: translateY(5px);

    &:focus {
      outline-color: #f8b195;
    }
  }

  input::-webkit-slider-runnable-track {
    -webkit-appearance: none;
    appearance: none;
    height: 3px;
    background: rgb(246, 114, 128);
    background: -webkit-linear-gradient(
      left,
      rgba(136, 196, 255, 1) 0%,
      rgba(58, 156, 255, 1) 50%,
      rgba(0, 77, 155, 1) 100%
    );
    background: linear-gradient(
      to right,
      rgba(136, 196, 255, 1) 0%,
      rgba(58, 156, 255, 1) 50%,
      rgba(0, 77, 155, 1) 100%
    );
  }

  input::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  border: 2px solid rgba(75, 128, 182, 1);
  border-radius: 50%;
  height: 20px;
  width: 20px;
  position: relative;
  bottom: 8px;
  background: #222
    url("http://codemenatalie.com/wp-content/uploads/2019/09/slider-thumb.png")
    center no-repeat;
  background-size: 50%;
  box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.4);
  cursor: grab;
    
    &:active {
      cursor: grabbing;
    }
  }

  input::-moz-range-thumb {
    -moz-appearance: none;
    appearance: none;
    border: 2px solid rgba(75, 128, 182, 1);
    border-radius: 50%;
    height: 20px;
    width: 20px;
    position: relative;
    bottom: 8px;
    background: #222
      url("http://codemenatalie.com/wp-content/uploads/2019/09/slider-thumb.png")
      center no-repeat;
    background-size: 50%;
    box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.4);
    cursor: grab;
    
    &:active {
      cursor: grabbing;
    }
  }
  #current-value {
    position: relative;
    transform-origin: center center;
    display: block;
    text-align: center;
    font-weight: bold;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    &::after {
        display: block;
        font-size: 20px;
        letter-spacing: 0.07em;
        margin-top: -2px;
    }
  }
  #mini-max {
    margin-top: 5px;
    display: flex;
    justify-content: space-between;
  }
</style>

<script>
  const slider = document.getElementById('{{ $name }}');
  const current = document.getElementById('current-value');
  
  slider.addEventListener('input', () => {
    current.innerHTML = slider.value;
    const position = slider.value / slider.max;
    current.style.left = `calc(${position * 100}% - ${position * 120}px)`;
  });
</script>