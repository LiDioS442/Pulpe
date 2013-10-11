/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Metier;
import java.sql.*;
/**
 *
 * @author Aurélien
 */
public class Film{

    private int idFilm;
    private String titreFilm;
    private String genreFilm;
    private String realisateur;
    private Date dateFilm;

    public Film( int idFilm, String titreFilm, String genreFilm, String realisateur, 
    Date dateFilm) {
        this.idFilm = idFilm;
        this.titreFilm = titreFilm;
        this.genreFilm = genreFilm;
        this.realisateur = realisateur;
        this.dateFilm = dateFilm;
   }

    public void setIdFilm(int idFilm) {
        this.idFilm = idFilm;
    }

    public void setTitreFilm(String titreFilm) {
        this.titreFilm = titreFilm;
    }

    public void setGenreFilm(String genreFilm) {
        this.genreFilm = genreFilm;
    }

    public void setRealisateur(String realisateur) {
        this.realisateur = realisateur;
    }

    public void setDateFilm(Date dateFilm) {
        this.dateFilm = dateFilm;
    }

    public int getIdFilm() {
        return idFilm;
    }

    public String getTitreFilm() {
        return titreFilm;
    }

    public String getGenreFilm() {
        return genreFilm;
    }

    public String getRealisateur() {
        return realisateur;
    }

    public Date getDateFilm() {
        return dateFilm;
    }
}