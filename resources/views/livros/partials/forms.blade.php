Titulo: <input type="text" name="titulo" value="{{old('titulo',$livro->titulo)}}">
Autor: <input type="text" name="autor" value="{{old('autor',$livro->autor)}}">
isbn: <input class="isbn" type="text" name="isbn" value="{{old('isbn',$livro->isbn)}}">

<button type="submit"> Enviar </button>