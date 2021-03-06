import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { DomSanitizer } from '@angular/platform-browser';
import { ActivatedRoute } from '@angular/router';
import { Film } from 'src/app/_shared/models/film.model';
import { DetailsFilmService } from './details-film.service';


@Component({
  selector: 'app-details-film',
  templateUrl: './details-film.component.html',
  styleUrls: ['./details-film.component.scss']
})
export class DetailsFilmComponent implements OnInit {
  film:Film
  films : Array<Film>
  constructor(
    private readonly route: ActivatedRoute,
    private readonly httpClient: HttpClient,
    private readonly detailsService: DetailsFilmService,
    private readonly sanitizer: DomSanitizer
  ) { }

  ngOnInit(): void {
    this.loadFilmDetails();
    this.detailsService.getList().subscribe(res=>this.loadfilm(res));
  }
  loadfilm(res) {
    this.films = res.publics;
  }
  
  loadFilmDetails() {
    const id = this.route.snapshot.paramMap.get("id")
    this.detailsService.getFilm(id).subscribe(res => this.film = res)
  }
  //Trailer Video
  getEmbedUrl(film) {
    return this.sanitizer.bypassSecurityTrustResourceUrl('https://www.youtube.com/embed/' + film.trailer);
  }

  


}
