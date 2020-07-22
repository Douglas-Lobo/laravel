                <input type="hidden" name="id" value="{{ isset($registro->id) ? $registro->id : '' }}">
                <div class="row">
                    <div class="input-field col l4 offset-l2">
                    <input name="titulo" type="text" class="validate"  value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
                    <label class="active" for="titulo">Titulo</label>
                    </div>

                    <div class="input-field col l4">
                    <input name="valor" type="text" class="validate" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
                    <label class="active" for="valor">Preço</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col l8 offset-l2">
                        <textarea name="descricao" class="materialize-textarea" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">{{ isset($registro->descricao) ? $registro->descricao : '' }}</textarea >
                        <label for="descricao">Descrição</label>
                    </div>
                </div>


                @if( isset($registro->imagem) )
                <div class='row'>

                    <div class="input-field col l2 offset-l2">
                        <img width="150" src="{{ asset($registro->imagem) }}" alt="{{ $registro->titulo }}">
                    </div>

                    <div class="input-field col l6">
                        <div class='file-field input-field'>
                            <div class='btn blue'>
                                <span>Imagem</span>
                                <input type="file" name='imagem'>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    
                </div>
                @else

                <div class='row'>
                    <div class="input-field col l8 offset-l2">
                        <div class='file-field input-field'>
                            <div class='btn blue'>
                                <span>Imagem</span>
                                <input type="file" name='imagem'>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                   
                @endif

                <div class='row'>
                    <div class="input-field col l8 offset-l2">    
                        <p class="range-field">
                            <input type="range" id="qualidade" name="qualidade" min="0" max="100" value="{{ isset($registro->qualidade) ? $registro->qualidade : '' }}">
                        </p>
                    </div>    
                </div>

                <div class='row'>
                    <div class="col l4 offset-l2">    
                        <p>
                            <input type="checkbox" class="filled-in" name='venda' id="venda" value='true' {{ isset($registro->venda) && $registro->venda == 'sim' ? 'checked' : ''}} >
                            <label for="venda">A venda?</label>
                        </p>
                        
                    </div> 

                     <div class="col l4 offset-l2">    
                        <button class="btn waves-effect waves-light blue" type="submit">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>     
                </div>

   
