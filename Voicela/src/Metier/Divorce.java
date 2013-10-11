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
public class Divorce {

    private int idDivorce;
    private int exidVip;
    private Date dateDivorce;
    private int idVip;
    
    public Divorce(int idDivorce, int exidVip, Date dateDivorce,int idVip) {
        this.idVip = idVip;
        this.idDivorce = idDivorce;
        this.exidVip = exidVip;
        this.dateDivorce = dateDivorce;
    }

    public void setIdDivorce(int idDivorce) {
        this.idDivorce = idDivorce;
    }

    public void setExidVip(int exidVip) {
        this.exidVip = exidVip;
    }

    public void setDateDivorce(Date dateDivorce) {
        this.dateDivorce = dateDivorce;
    }

    public void setIdVip(int idVip) {
        this.idVip = idVip;
    }

    public int getIdDivorce() {
        return idDivorce;
    }

    public int getExidVip() {
        return exidVip;
    }

    public Date getDateDivorce() {
        return dateDivorce;
    }

    public int getIdVip() {
        return idVip;
    }

}