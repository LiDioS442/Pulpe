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
public class Casting {
    private int idVip;
    private int idFilm;

    public Casting(int idVip, int idFilm) {
        this.idVip = idVip;
        this.idFilm = idFilm;
    }

    public int getIdVip() {
        return idVip;
    }

    public int getIdFilm() {
        return idFilm;
    }

    public void setIdVip(int idVip) {
        this.idVip = idVip;
    }

    public void setIdFilm(int idFilm) {
        this.idFilm = idFilm;
    }
    
}
