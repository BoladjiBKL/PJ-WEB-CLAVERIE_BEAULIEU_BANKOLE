using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Eceamazon
{
    #region Bestsellers
    public class Bestsellers
    {
        #region Member Variables
        protected int _id;
        protected string _nom;
        protected int _taille;
        protected string _titre;
        protected string _auteur;
        protected string _edition;
        protected string _artiste;
        protected int _annee;
        protected string _label;
        protected unknown _description;
        protected unknown _urlimg;
        protected unknown _prix;
        protected string _mail;
        #endregion
        #region Constructors
        public Bestsellers() { }
        public Bestsellers(string nom, int taille, string titre, string auteur, string edition, string artiste, int annee, string label, unknown description, unknown urlimg, unknown prix, string mail)
        {
            this._nom=nom;
            this._taille=taille;
            this._titre=titre;
            this._auteur=auteur;
            this._edition=edition;
            this._artiste=artiste;
            this._annee=annee;
            this._label=label;
            this._description=description;
            this._urlimg=urlimg;
            this._prix=prix;
            this._mail=mail;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual int Taille
        {
            get {return _taille;}
            set {_taille=value;}
        }
        public virtual string Titre
        {
            get {return _titre;}
            set {_titre=value;}
        }
        public virtual string Auteur
        {
            get {return _auteur;}
            set {_auteur=value;}
        }
        public virtual string Edition
        {
            get {return _edition;}
            set {_edition=value;}
        }
        public virtual string Artiste
        {
            get {return _artiste;}
            set {_artiste=value;}
        }
        public virtual int Annee
        {
            get {return _annee;}
            set {_annee=value;}
        }
        public virtual string Label
        {
            get {return _label;}
            set {_label=value;}
        }
        public virtual unknown Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual unknown Urlimg
        {
            get {return _urlimg;}
            set {_urlimg=value;}
        }
        public virtual unknown Prix
        {
            get {return _prix;}
            set {_prix=value;}
        }
        public virtual string Mail
        {
            get {return _mail;}
            set {_mail=value;}
        }
        #endregion
    }
    #endregion
}