@extends('layouts.app')

@section('content')
<section class="wrapper">
        <div class="container-fostrap">
            <div>
                <h1 class="heading">
                    Latest news
                </h1>
                <label for="tags">Choose category</label>
                <select name="tags" id="tags">
                    <?php 
                    $tags = DB::table('articles')->pluck('articlesTag');?>
                    <option value=""></option>
                    <option value="computer">Computers</option>
                    <option value="mobile">Mobile</option>
                    <option value="hardware">Hardware</option>
                </select>
                {{ Form::submit('submit') }}
                <br>
                <br>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <?php
                            $articles = DB::table('articles')->where('articlesTag',"Computer"); 
                            foreach ($articles as $data)  { ?>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                            <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                                          </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="http://www.fostrap.com/2016/02/awesome-material-design-responsive-menu.html"> <?php echo $data->articlesTitle ?>
                                                </a>
                                            </h4>
                                            <p class="">
                                                <?php 
                                                $temp = $data->articlesContent;
                                                $pos=strpos($temp," ",200);
                                                $temp = substr($temp,0,$pos);
                                                echo $temp ?>
                                            </p>
                                        </div>
                                    <div class="card-read-more">
                                        <a href="{{ route('article.select' , $data->articleid) }}" class="btn btn-link btn-block">
                                        Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                           <?php  } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection