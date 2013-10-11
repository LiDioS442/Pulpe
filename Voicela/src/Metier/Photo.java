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
public class Photo {
    private int idPhoto;
    private String adressePhoto;

    public Photo(int idPhoto, String adressePhoto) {
        this.idPhoto = idPhoto;
        this.adressePhoto = adressePhoto;
    }

    public int getIdPhoto() {
        return idPhoto;
    }

    public String getAdressePhoto() {
        return adressePhoto;
    }

    public void setIdPhoto(int idPhoto) {
        this.idPhoto = idPhoto;
    }

    public void setAdressePhoto(String adressePhoto) {
        this.adressePhoto = adressePhoto;
    }
}
