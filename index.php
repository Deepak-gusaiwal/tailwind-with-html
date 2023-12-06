<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>This is the Home page</title>
    <link rel="stylesheet" href="./assets/style.css" />
  </head>
  <body class="p-2 max-w-[1100px] mx-auto">
    <h1 class="text-3xl text-blue-700  text-center my-2 font-bold">
      How To Use Tailwind css in HTML Files
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2">

        <div class="grid-item bg-slate-800 text-white border-2 p-2 rounded-lg">
            <h3 class="text-xl font-bold my-2 text-yellow-400">Step-1</h3>
            <p>
              run this command <em class="font-bold text-yellow-200"> npx tailwindcss init</em> in
              terminal it will initialize a
              <em class="font-bold text-yellow-200"> tailwind.config.js </em>
            </p>
        </div>
        
        <div class="grid-item bg-slate-800 text-white border-2 p-2 rounded-lg">
            <h3 class="text-xl font-bold my-2 text-yellow-400">Step-2</h3>
    <p>
      now create a folder and file <em class="font-bold text-yellow-200"> src>input.css</em> and
      place this inside it
      <br />
      <em class="font-bold text-yellow-200">
        @tailwind base; <br />
        @tailwind components;<br />
        @tailwind utilities;<br />
      </em>
    </p>
        </div>
        
        <div class="grid-item bg-slate-800 text-white border-2 p-2 rounded-lg">
            <h3 class="text-xl font-bold my-2 text-yellow-400">Step-3</h3>
            <p>
              now create your own assets folder
              <em class="font-bold text-yellow-200"> assets>style.css</em> and run this command
              <br />
              <em class="font-bold text-yellow-200">
                npx tailwindcss -i ./src/input.css -o ./assets/style.css <br />
                OR<br />
                npx tailwindcss -i ./src/input.css -o ./assets/style.css --watch
                <span class="font-[500]">(for continioulsy working on it)</span>
              </em>
            </p>
        </div>
        
        <div class="grid-item bg-slate-800 text-white border-2 p-2 rounded-lg">
            <h3 class="text-xl font-bold my-2 text-yellow-400">Step-4</h3>
            <p>
              configure the path of your html or js or php files in 
              <em class="font-bold text-yellow-200">tailwind.config.js</em> like this
              <br />
              <e class="font-bold text-yellow-200">
        /** @type {import('tailwindcss').Config} */ <br>
        module.exports = {<br>
            content: ["./*.{html,js}"],<br>
            theme: {<br>
            extend: {},<br>
            },<br>
            plugins: [],<br>
        }<br>
              </e>
        if your files are inside any folder define your file path correctly
        for eg:-<br>
        <e class="font-bold text-yellow-200">
                content: ["./folderName/*.{html,js}"]
        </e>
            </p>
        </div>
        
        <div class="grid-item bg-slate-800 text-white border-2 p-2 rounded-lg">
            <h3 class="text-xl font-bold my-2 text-yellow-400">Step-5</h3>
            <p>
              include the generated css file with you html/php/js files
              <em class="font-bold text-yellow-200"> <br> &lt;link rel="stylesheet" href="./assets/style.css" /&gt; </em> <br>
              after that you can use it
            </p>
        </div>
    </div>
   
    
  </body>
</html>
