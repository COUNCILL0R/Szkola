namespace Klasy_zadania
{
    internal class Program
    {
        public class Pojazd
        {
            public string Marka { set; get; }
            public string Model { set; get; }
            public int RokProdukcji { set; get; }
            public double Przebieg {  set; get; }
            public Pojazd(string marka, string model, int rokProdukcji, double przebieg)
            {
                Marka = marka;
                Model = model;
                RokProdukcji = rokProdukcji;
                Przebieg = przebieg;
            }
            public void WyswietlInformacje()
            {
                Console.WriteLine($"Pojazd : {Marka}, Rok : {RokProdukcji}, Przebieg : {Przebieg}");
            }
        }
        public class Samochod : Pojazd
        {
            public string TypPaliwa { get; set; }
            public double PojemnoscSilnika { get; set; }
            public Samochod(string marka, string model, int rokProdukcji, double przebieg, string typPaliwa, double pojemnoscSilnika)
                : base(marka, model, rokProdukcji, przebieg)
            {
                TypPaliwa = typPaliwa;
                PojemnoscSilnika = pojemnoscSilnika;
            }
            public new void WyswietlInformacje()
            {
                base.WyswietlInformacje();
                Console.WriteLine($"Typ paliwa: {TypPaliwa}, Pojemność silnika: {PojemnoscSilnika}L");
            }
        }

        static void Main(string[] args)
        {
            Pojazd pojazd1 = new Pojazd("Toyota", "Corolla", 2018, 85000);

            Samochod samochod1 = new Samochod("BMW", "X5", 2020, 50000, "Benzyna", 3.0);

            pojazd1.WyswietlInformacje();
            Console.WriteLine();

            samochod1.WyswietlInformacje();
            Console.WriteLine();

            pojazd1.Przebieg = 90000;

            Console.WriteLine("Aktualizacja przebiegu...");
            pojazd1.WyswietlInformacje();
        }
    }
}
