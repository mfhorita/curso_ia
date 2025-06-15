"use client"

import { Button } from "@/components/ui/button"
import { Card, CardContent } from "@/components/ui/card"
import { ArrowRight, Zap, Target, TrendingUp } from "lucide-react"

export default function BridgePage() {
  return (
    <div className="min-h-screen bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900">
      {/* Pixel Tracking Area - Adicione seus pixels aqui */}
      <div id="pixel-container" className="hidden">
        {/* Facebook Pixel */}
        {/* Google Analytics */}
        {/* Outros pixels de tracking */}
      </div>

      <div className="container mx-auto px-4 py-8">
        <div className="max-w-4xl mx-auto">
          {/* Header */}
          <div className="text-center mb-12">
            <div className="inline-flex items-center bg-yellow-400 text-black px-4 py-2 rounded-full text-sm font-semibold mb-6">
              <Zap className="w-4 h-4 mr-2" />
              OPORTUNIDADE LIMITADA
            </div>
            <h1 className="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
              Descubra Como a
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-500">
                {" "}
                Inteligência Artificial{" "}
              </span>
              Pode Transformar Sua Carreira
            </h1>
            <p className="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
              Aprenda as habilidades mais demandadas do mercado e se torne um profissional disputado na era da IA
            </p>
          </div>

          {/* Benefits Grid */}
          <div className="grid md:grid-cols-3 gap-6 mb-12">
            <Card className="bg-white/10 backdrop-blur-sm border-white/20">
              <CardContent className="p-6 text-center">
                <Target className="w-12 h-12 text-yellow-400 mx-auto mb-4" />
                <h3 className="text-xl font-semibold text-white mb-2">Método Comprovado</h3>
                <p className="text-gray-300">Sistema passo a passo testado por milhares de alunos</p>
              </CardContent>
            </Card>
            <Card className="bg-white/10 backdrop-blur-sm border-white/20">
              <CardContent className="p-6 text-center">
                <TrendingUp className="w-12 h-12 text-green-400 mx-auto mb-4" />
                <h3 className="text-xl font-semibold text-white mb-2">Resultados Rápidos</h3>
                <p className="text-gray-300">Veja mudanças na sua carreira em poucas semanas</p>
              </CardContent>
            </Card>
            <Card className="bg-white/10 backdrop-blur-sm border-white/20">
              <CardContent className="p-6 text-center">
                <Zap className="w-12 h-12 text-blue-400 mx-auto mb-4" />
                <h3 className="text-xl font-semibold text-white mb-2">Suporte Total</h3>
                <p className="text-gray-300">Acompanhamento completo durante toda sua jornada</p>
              </CardContent>
            </Card>
          </div>

          {/* Call to Action Button */}
          <Card className="max-w-2xl mx-auto bg-white/95 backdrop-blur-sm">
            <CardContent className="p-8">
              <div className="text-center mb-6">
                <h2 className="text-3xl font-bold text-gray-900 mb-4">Acesse Agora o Curso Completo</h2>
                <p className="text-gray-600 text-lg">
                  Clique no botão abaixo e descubra como milhares de pessoas estão transformando suas carreiras com IA
                </p>
              </div>

              <div className="text-center">
                <Button
                  onClick={() => {
                    // Dispara evento do TikTok Pixel
                    if (typeof window !== "undefined" && (window as any).ttq) {
                      ;(window as any).ttq.track("ClickButton", {
                        content_type: "product",
                        content_name: "Curso IA - Acesso",
                        value: 1,
                        currency: "BRL",
                      })
                    }

                    // Redireciona para a página de vendas
                    window.location.href = "https://curso-ia.programacaoweb.com.br/?ref=O99938718Y"
                  }}
                  className="w-full h-14 text-lg font-semibold bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700"
                >
                  QUERO ACESSAR O CURSO AGORA
                  <ArrowRight className="w-5 h-5 ml-2" />
                </Button>
              </div>

              <div className="mt-6 text-center">
                <p className="text-sm text-gray-500">🔒 Acesso 100% seguro e garantido</p>
              </div>
            </CardContent>
          </Card>

          {/* Social Proof */}
          <div className="text-center mt-12">
            <p className="text-gray-300 mb-4">Mais de 50.000 alunos já transformaram suas carreiras</p>
            <div className="flex justify-center items-center space-x-2">
              {[...Array(5)].map((_, i) => (
                <div key={i} className="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                  ⭐
                </div>
              ))}
              <span className="text-white ml-2 font-semibold">4.9/5 (12.847 avaliações)</span>
            </div>
          </div>

          {/* Urgency */}
          <div className="text-center mt-8">
            <div className="inline-block bg-red-600 text-white px-6 py-3 rounded-lg">
              <p className="font-semibold">⏰ Oferta por tempo limitado - Não perca!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
