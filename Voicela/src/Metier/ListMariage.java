/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Metier;

import java.sql.Date;

/**
 *
 * @author Aurélien
 */
public class ListMariage {
    private String Nom;
    private String Prenom;
    private String NomConjoint;
    private String PrenomConjoint;
    private String LieuMariage;
    private Date DateMariage;
    

    public ListMariage(String Nom, String Prenom, String NomConjoint, String PrenomConjoint, String LieuMariage, Date DateMariage) {
        this.Nom = Nom;
        this.Prenom = Prenom;
        this.NomConjoint = NomConjoint;
        this.PrenomConjoint = PrenomConjoint;
        this.LieuMariage = LieuMariage;
        this.DateMariage = DateMariage;
    }

    public void setNom(String Nom) {
        this.Nom = Nom;
    }

    public void setPrenom(String Prenom) {
        this.Prenom = Prenom;
    }

    public void setNomConjoint(String NomConjoint) {
        this.NomConjoint = NomConjoint;
    }

    public void setPrenomConjoint(String PrenomConjoint) {
        this.PrenomConjoint = PrenomConjoint;
    }

    public void setLieuMariage(String LieuMariage) {
        this.LieuMariage = LieuMariage;
    }

    public void setDateMariage(Date DateMariage) {
        this.DateMariage = DateMariage;
    }

    public String getNom() {
        return Nom;
    }

    public String getPrenom() {
        return Prenom;
    }

    public String getNomConjoint() {
        return NomConjoint;
    }

    public String getPrenomConjoint() {
        return PrenomConjoint;
    }

    public String getLieuMariage() {
        return LieuMariage;
    }

    public Date getDateMariage() {
        return DateMariage;
    }


}
