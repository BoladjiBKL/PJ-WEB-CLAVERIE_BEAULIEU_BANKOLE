using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Eceamazon
{
    #region Acheteur
    public class Acheteur
    {
        #region Member Variables
        protected string _mailacheteur;
        protected string _nom;
        protected string _prenom;
        protected string _mdp;
        protected string _adresse;
        protected string _adresse;
        protected string _ville;
        protected int _codepost;
        protected string _pays;
        protected int _tel;
        protected string _typepaie;
        protected unknown _numcarte;
        protected string _nomcarte;
        protected string _datecarte;
        protected int _codecarte;
        #endregion
        #region Constructors
        public Acheteur() { }
        public Acheteur(string nom, string prenom, string mdp, string adresse, string adresse, string ville, int codepost, string pays, int tel, string typepaie, unknown numcarte, string nomcarte, string datecarte, int codecarte)
        {
            this._nom=nom;
            this._prenom=prenom;
            this._mdp=mdp;
            this._adresse=adresse;
            this._adresse=adresse;
            this._ville=ville;
            this._codepost=codepost;
            this._pays=pays;
            this._tel=tel;
            this._typepaie=typepaie;
            this._numcarte=numcarte;
            this._nomcarte=nomcarte;
            this._datecarte=datecarte;
            this._codecarte=codecarte;
        }
        #endregion
        #region Public Properties
        public virtual string Mailacheteur
        {
            get {return _mailacheteur;}
            set {_mailacheteur=value;}
        }
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual string Prenom
        {
            get {return _prenom;}
            set {_prenom=value;}
        }
        public virtual string Mdp
        {
            get {return _mdp;}
            set {_mdp=value;}
        }
        public virtual string Adresse
        {
            get {return _adresse;}
            set {_adresse=value;}
        }
        public virtual string Adresse
        {
            get {return _adresse;}
            set {_adresse=value;}
        }
        public virtual string Ville
        {
            get {return _ville;}
            set {_ville=value;}
        }
        public virtual int Codepost
        {
            get {return _codepost;}
            set {_codepost=value;}
        }
        public virtual string Pays
        {
            get {return _pays;}
            set {_pays=value;}
        }
        public virtual int Tel
        {
            get {return _tel;}
            set {_tel=value;}
        }
        public virtual string Typepaie
        {
            get {return _typepaie;}
            set {_typepaie=value;}
        }
        public virtual unknown Numcarte
        {
            get {return _numcarte;}
            set {_numcarte=value;}
        }
        public virtual string Nomcarte
        {
            get {return _nomcarte;}
            set {_nomcarte=value;}
        }
        public virtual string Datecarte
        {
            get {return _datecarte;}
            set {_datecarte=value;}
        }
        public virtual int Codecarte
        {
            get {return _codecarte;}
            set {_codecarte=value;}
        }
        #endregion
    }
    #endregion
}