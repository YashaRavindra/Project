using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Camera
{
    class Program
    {
        static void Main(string[] args)
        {
            Affdex.Detector detector = new Affdex.CameraDetector(0, 30, 30, 3, Affdex.FaceDetectorMode.LARGE_FACES);
            ProcessCameraFeed feed = new ProcessCameraFeed(detector);
            detector.setClassifierPath("C:\\Program Files\\Affectiva\\AffdexSDK\\data");
            detector.setDetectAllEmotions(true);
            detector.setDetectAllEmojis(true);
            detector.setDetectSmirk(true);
            detector.setDetectGender(true);
            detector.setDetectGlasses(true);
            detector.start();
            feed.ShowDialog();
            detector.stop();

        }
    }
}
