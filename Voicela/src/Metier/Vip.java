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
public class Vip implements Comparable<Vip> {

    private int idVIP;
    private String nomVIP;
    private String prenom1;
    private String prenom2;
    private String prenom3;
    private String nationalite;
    private Date datenaiss;
    private String lieunaiss;
    private String sexe;
    private String type;
    private Boolean etatmariage;

    public Vip(int idVIP, String nomVIP, String prenom1,String prenom2,String prenom3,String nationalite,
            Date datenaiss, String lieunaiss, String sexe, String type, boolean etatmariage) {
        this.idVIP = idVIP;
        this.nomVIP = nomVIP;
        this.prenom1 = prenom1;
        this.prenom2 = prenom2;
        this.prenom3 = prenom3;
        this.nationalite = nationalite;
        this.datenaiss = datenaiss;
        this.lieunaiss = lieunaiss ;
        this.sexe = sexe;
        this.type = type;
        this.etatmariage = etatmariage;        
    }

    @Override
    public String toString() {
        return ("\nnom = " + nomVIP + " et prenom = " + prenom1);
    }

    @Override
    public int compareTo(Vip p) {
        return nomVIP.compareTo(p.nomVIP);
    }

    public int getIdVIP() {
        return idVIP;
    }

    public String getNomVIP() {
        return nomVIP;
    }

    public String getPrenom1() {
        return prenom1;
    }

    public String getPrenom2() {
        return prenom2;
    }

    public String getPrenom3() {
        return prenom3;
    }

    public String getNationalite() {
        return nationalite;
    }

    public Date getDatenaiss() {
        return datenaiss;
    }

    public String getLieunaiss() {
        return lieunaiss;
    }

    public String getSexe() {
        return sexe;
    }

    public String getType() {
        return type;
    }

    public Boolean getEtatmariage() {
        return etatmariage;
    }

    public void setIdVIP(int idVIP) {
        this.idVIP = idVIP;
    }

    public void setNomVIP(String nomVIP) {
        this.nomVIP = nomVIP;
    }

    public void setPrenom1(String prenom1) {
        this.prenom1 = prenom1;
    }

    public void setPrenom2(String prenom2) {
        this.prenom2 = prenom2;
    }

    public void setPrenom3(String prenom3) {
        this.prenom3 = prenom3;
    }

    public void setNationalite(String nationalite) {
        this.nationalite = nationalite;
    }

    public void setDatenaiss(Date datenaiss) {
        this.datenaiss = datenaiss;
    }

    public void setLieunaiss(String lieunaiss) {
        this.lieunaiss = lieunaiss;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    public void setType(String type) {
        this.type = type;
    }

    public void setEtatmariage(Boolean etatmariage) {
        this.etatmariage = etatmariage;
    }
    
}