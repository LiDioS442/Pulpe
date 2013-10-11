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
public class Mariage {
    private int idMariage;
    private String lieuMariage;
    private int idConjoint;
    private Date dateMariage;
    private int idVip;
    

    public Mariage(int idMariage, String lieuMariage, int idConjoint, Date dateMariage, int idVip) {
        this.idMariage = idMariage;
        this.lieuMariage = lieuMariage;
        this.idConjoint = idConjoint;
        this.dateMariage = dateMariage;
        this.idVip = idVip;
        
    }

    public int getIdMariage() {
        return idMariage;
    }

    public String getLieuMariage() {
        return lieuMariage;
    }

    public int getIdConjoint() {
        return idConjoint;
    }

    public int getIdVip() {
        return idVip;
    }

    public Date getDateMariage() {
        return dateMariage;
    }

    public void setIdMariage(int idMariage) {
        this.idMariage = idMariage;
    }

    public void setLieuMariage(String lieuMariage) {
        this.lieuMariage = lieuMariage;
    }

    public void setIdConjoint(int idConjoint) {
        this.idConjoint = idConjoint;
    }

    public void setIdVip(int idVip) {
        this.idVip = idVip;
    }

    public void setDateMariage(Date dateMariage) {
        this.dateMariage = dateMariage;
    }
    
}

