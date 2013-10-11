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
public class Apparaitre {
    private int idVip;
    private int idPhoto;

    public Apparaitre(int idVip, int idPhoto) {
        this.idVip = idVip;
        this.idPhoto = idPhoto;
    }

    public int getIdVip() {
        return idVip;
    }

    public int getIdPhoto() {
        return idPhoto;
    }

    public void setIdVip(int idVip) {
        this.idVip = idVip;
    }

    public void setIdPhoto(int idPhoto) {
        this.idPhoto = idPhoto;
    }
}
